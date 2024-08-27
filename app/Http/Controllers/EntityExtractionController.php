<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntityExtractionController extends Controller
{
    public function extractEntities(Request $request)
    {
        $url = $request->input('url');
        $escapedUrl = escapeshellarg($url);

        $scriptPath = base_path('scripts/extract_entities.py');

        $command = "python3 $scriptPath $escapedUrl";
        $output = shell_exec($command);

        $result = json_decode($output, true);

        if (json_last_error() === JSON_ERROR_NONE) {
            // Filtra solo las 5 entidades más relevantes
            if (isset($result['entities']) && is_array($result['entities'])) {
                usort($result['entities'], function($a, $b) {
                    return $b['salience'] <=> $a['salience']; // Ordena en orden descendente por salience
                });
                $result['entities'] = array_slice($result['entities'], 0, 5); // Obtiene solo las primeras 5 entidades
            }

            return response()->json($result);
        } else {
            return response()->json(['error' => 'El script de Python devolvió un resultado inválido.'], 500);
        }
    }
}

