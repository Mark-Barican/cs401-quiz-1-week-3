<div>
    <h1>Game Details</h1>
    <div style="color: rgb(36, 18, 101); margin: 20px 0;">
        <p><b><i>ID: {{ $game->id }}</i></b></p>
        <h2><b>{{ $game->title }}</b></h2>
        <p><b>Developer:</b> <i>{{ $game->developer }}</i></p>
        <p><b>Publisher:</b> {{ $game->publisher }}</p>
        <p><b>Genre:</b> {{ $game->genre }}</p>
        <p><b>Release Date:</b> {{ $game->releaseDate }}</p>
        <p><b>Platform:</b> {{ $game->platform }}</p>
        <p><b>Price:</b> ${{ $game->price }}</p>
    </div>
    <a href="/games" style="color: blue; text-decoration: underline;">← Back to Games List</a>
</div> 