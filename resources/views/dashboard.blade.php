<x-app-layout>
    <div class="container mx-auto p-6">
        <h2 class="page-title">Game Leaderboard</h2>

        @if($winner)
            <div class="winner-box">
                <h3>Winner: {{ $winner->team_id }}</h3>
                <p>Logged in at: {{ $winner->login_time }}</p>
            </div>
        @endif

        <table class="leaderboard-table">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Team ID</th>
                    <th>Login Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach($leaderboard as $index => $team)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $team->team_id }}</td>
                        <td>{{ $team->login_time }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
