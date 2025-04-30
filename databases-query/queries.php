<?php
// Connect to the SQLite database
$pdo = new PDO('sqlite:spotify.sqlite');

// Function to get the total number of tracks
function getTrackCount() {
    global $pdo;
    $stmt = $pdo->query("SELECT COUNT(*) FROM tracks");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['COUNT(*)'];
}

// Function to get tracks with 'you' in the title
function getTracksWithYouInTitle() {
    global $pdo;
    $stmt = $pdo->query("SELECT title FROM tracks WHERE title LIKE '%you%'");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Function to get tracks with 'you' and 'i' in the title
function getTracksWithYouAndIInTitle() {
    global $pdo;
    $stmt = $pdo->query("SELECT title FROM tracks WHERE title LIKE '%you%' AND title LIKE '%i%'");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Function to get tracks with 'you' and 'i' in the title and album containing 'vol' or 'chron'
function getTracksWithAlbumCondition() {
    global $pdo;
    $stmt = $pdo->query("SELECT tracks.title, albums.title AS album_title 
                          FROM tracks
                          JOIN albums ON tracks.album_id = albums.id
                          WHERE tracks.title LIKE '%you%' 
                          AND tracks.title LIKE '%i%' 
                          AND (albums.title LIKE '%vol%' OR albums.title LIKE '%chron%')");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Function to get artists for tracks with 'you' and 'i' in the title and album containing 'vol' or 'chron'
function getArtistsForTracksWithYouAndI() {
    global $pdo;
    $stmt = $pdo->query("SELECT artists.name 
                          FROM tracks
                          JOIN albums ON tracks.album_id = albums.id
                          JOIN artists ON tracks.artist_id = artists.id
                          WHERE tracks.title LIKE '%you%' 
                          AND tracks.title LIKE '%i%' 
                          AND (albums.title LIKE '%vol%' OR albums.title LIKE '%chron%')");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Function to get playlists that contain the song 'I Put a Spell on You'
function getPlaylistsForSong($songTitle) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT playlists.name FROM playlists 
                           JOIN playlist_tracks ON playlists.id = playlist_tracks.playlist_id
                           JOIN tracks ON playlist_tracks.track_id = tracks.id
                           WHERE tracks.title = ?");
    $stmt->execute([$songTitle]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Function to get songs in a specific playlist
function getSongsInPlaylist($playlistName) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT tracks.title FROM tracks
                           JOIN playlist_tracks ON tracks.id = playlist_tracks.track_id
                           JOIN playlists ON playlist_tracks.playlist_id = playlists.id
                           WHERE playlists.name = ?");
    $stmt->execute([$playlistName]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
