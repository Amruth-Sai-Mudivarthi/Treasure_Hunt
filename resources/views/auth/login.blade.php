<x-guest-layout>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <div class="login-container">
        <h2 class="login-title">Team Login</h2>

        <!-- Display Validation Errors -->
        @if ($errors->any())
            <div class="error-message">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Team ID -->
            <div class="input-group">
                <label for="team_id">Team ID</label>
                <input id="team_id" type="text" name="team_id" required autofocus>
            </div>

            <!-- Password -->
            <div class="input-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required>
            </div>

            <div class="button-container">
                <button type="submit" class="login-btn">Login</button>
            </div>
        </form>
    </div>
</x-guest-layout>
