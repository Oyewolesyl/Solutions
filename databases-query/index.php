<?php
include 'queries.php';

// Step 1: Track count
$trackCount = getTrackCount();

// Step 2: Tracks with 'you' in the title
$tracksWithYou = getTracksWithYouInTitle();

// Step 3: Tracks with 'you' and 'i' in the title
$tracksWithYouAndI = getTracksWithYouAndIInTitle();

// Step 4: Tracks with 'you' and 'i' in the title and album containing 'vol' or 'chron'
$tracksWithAlbumCondition = getTracksWithAlbumCondition();

// Step 5: Artists for tracks with 'you' and 'i' in the title and album containing 'vol' or 'chron'
$artistsForTracks = getArtistsForTracksWithYouAndI();

// Step 6: Playlists that contain 'I Put a Spell on You'
$playlists = getPlaylistsForSong("I Put a Spell on You");

// Step 7: Songs in the first playlist (only if playlist exists)
$songsInFirstPlaylist = [];
if (!empty($playlists) && isset($playlists[0]['name'])) {
    $songsInFirstPlaylist = getSongsInPlaylist($playlists[0]['name']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Database</title>
</head>
<body>
    <h1>Spotify Database Search</h1>
    <p>Total number of tracks: <?php echo $trackCount; ?></p>

    <h2>Tracks containing 'you' in the title:</h2>
    <ul>
        <?php foreach ($tracksWithYou as $track) { ?>
            <li><?php echo $track['title']; ?></li>
        <?php } ?>
    </ul>

    <h2>Tracks containing both 'you' and 'i' in the title:</h2>
    <ul>
        <?php foreach ($tracksWithYouAndI as $track) { ?>
            <li><?php echo $track['title']; ?></li>
        <?php } ?>
    </ul>

    <h2>Tracks with 'you' and 'i' in the title, from albums with 'vol' or 'chron':</h2>
    <ul>
        <?php foreach ($tracksWithAlbumCondition as $track) { ?>
            <li><?php echo $track['title']; ?> (Album: <?php echo $track['album_title']; ?>)</li>
        <?php } ?>
    </ul>

    <h2>Artists for tracks with 'you' and 'i' in the title, from albums with 'vol' or 'chron':</h2>
    <ul>
        <?php foreach ($artistsForTracks as $artist) { ?>
            <li><?php echo $artist['name']; ?></li>
        <?php } ?>
    </ul>

    <h2>Playlists containing 'I Put a Spell on You':</h2>
    <ul>
        <?php if (!empty($playlists)) {
            foreach ($playlists as $playlist) { ?>
                <li><?php echo $playlist['name']; ?></li>
            <?php }
        } else { ?>
            <li>No playlists found.</li>
        <?php } ?>
    </ul>

    <h2>Songs in the first playlist:</h2>
    <ol>
        <?php if (!empty($songsInFirstPlaylist)) {
            foreach ($songsInFirstPlaylist as $song) { ?>
                <li><?php echo $song['title']; ?></li>
            <?php }
        } else { ?>
            <li>No songs to display.</li>
        <?php } ?>
    </ol>

</body>
</html>
