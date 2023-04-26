<form action="{{ url('/reset-password') }}" method="POST">
    @csrf
    <h1>Modifier votre mot de passe </h1>
    <input type="hidden" name="token" value={{$token}} />
    <div>
        <label for="email">Email : </label>
        <input type="text" name="email" id="email">
    </div>
    <div>
        <label for="password">Password : </label>
        <input type="text" name="password" id="password">
    </div>
    <div>
        <label for="password_confirmation">password_confirmation : </label>
        <input type="text" name="password_confirmation" id="password_confirmation">
    </div>
    <input type="submit" value="Envoyer !">
</form>