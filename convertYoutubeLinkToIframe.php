<?php

function extractYouTubeVideoId($url) {
    $videoId = '';

    $patterns = [
        '/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/',
    ];

    foreach ($patterns as $pattern) {
        if (preg_match($pattern, $url, $matches)) {
            $videoId = $matches[1];
            break;
        }
    }

    return $videoId;
}

function generateYouTubeIframe($videoId) {
    // Génère le code iframe avec l'identifiant de la vidéo
    $iframeCode = '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $videoId . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';

    return $iframeCode;
}

$youtubeUrl = 'https://www.youtube.com/embed/CbRWYCEZOK0?si=lS3-bHWcQsVDbXk1&controls=0';
$videoId = extractYouTubeVideoId($youtubeUrl);

if (!empty($videoId)) {
    $iframeCode = generateYouTubeIframe($videoId);
    echo $iframeCode;
} else {
    echo 'Impossible d\'extraire l\'identifiant de la vidéo YouTube depuis l\'URL fournie.';
}
?>
