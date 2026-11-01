<?php

// Build project URLs from the requested script, whether hosted at / or /KUA/.
function kua_url(string $path): string
{
    $projectPath = str_replace('\\', '/', dirname(__DIR__)) . '/';
    $scriptPath = str_replace('\\', '/', $_SERVER['SCRIPT_FILENAME'] ?? '');
    $scriptUrl = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
    $baseUrl = '';

    if (strncasecmp($scriptPath, $projectPath, strlen($projectPath)) === 0) {
        $relativeScript = substr($scriptPath, strlen($projectPath) - 1);
        if (str_ends_with($scriptUrl, $relativeScript)) {
            $baseUrl = substr($scriptUrl, 0, -strlen($relativeScript));
        }
    }

    return htmlspecialchars(rtrim($baseUrl, '/') . '/' . ltrim($path, '/'), ENT_QUOTES, 'UTF-8');
}
