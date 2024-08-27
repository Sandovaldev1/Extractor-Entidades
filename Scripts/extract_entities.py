import json
import sys
import requests
from google.cloud import language_v1

def analyze_entities(content):

#Creamos una función que analiza el contenido de texto utilizando la API de Google Cloud Natural Language
#para extraer entidades.
 
 #Crea un cliente para la API de Google Cloud Natural Language
    client = language_v1.LanguageServiceClient()

# Definimos el documento que se va a analizar
    document = language_v1.Document(
        content=content,
        type_=language_v1.Document.Type.PLAIN_TEXT, # Tipo de documento (texto plano)
    )

# Envíamos el documento a la API para analizar las entidades
    response = client.analyze_entities(document=document)
    entities = response.entities

    # Creamos una lista de entidades
    results = []
    # Para cada entidad encontrada, agrega un diccionario con su nombre, tipo y relevancia a la lista de resultados
    for entity in entities:
        results.append({
            'name': entity.name, #Nombre de la entidad
            'type': entity.type_, #Tipo de entidad
            'salience': entity.salience, #Relevancia de la entidad
        })

    return results

if __name__ == "__main__":
     # Verifica que se ha pasado una URL como argumento en la línea de comandos
    url = sys.argv[1]
    # Obtiene la URL pasada como argumento
    response = requests.get(url)

    # Extrae el texto del contenido de la respuesta
    content = response.text

 # Imprime el resultado en formato JSON, con una indentación de 2 espacios para mejorar la legibilidad
    entities = analyze_entities(content)
    print(json.dumps({'entities': entities}, indent=2))
