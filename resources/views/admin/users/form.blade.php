<div class="mb-3">
    <label for="fio" class="form-label">User F.I.O</label>
    <input type="text" class="form-control" id="fio" name="fio" value="{{ old('fio') ?? $user->fio }}">
</div>
<div class="mb-3">
    <label for="login" class="form-label">User Login</label>
    <input type="text" class="form-control" id="login" name="login" value="{{ old('login') ?? $user->login }}">
</div>
<div class="mb-3">
    <label for="password" class="form-label">User Password</label>
    <input type="text" class="form-control" id="password" name="password" value="{{ old('password') ?? $user->password }}">
</div>
<div class="mb-3">
    <label for="role_id" class="form-label">User role_id</label>
    <input type="text" class="form-control" id="role_id" name="role_id" value="{{ old('role_id') ?? $user->role_id }}">
</div>
