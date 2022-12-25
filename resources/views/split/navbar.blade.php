<style>
  .logo {
    top: 0;
    left: 0;
    z-index: 1;
    max-width: 100%;
    height: auto;
    max-height: 110px;
    vertical-align: middle;
    border-style: none;
    object-fit: cover;
  }

  .login {
    cursor: pointer;
    position: absolute;
    margin-top: 25px;
    top: 20px;
    right: 20px;
    z-index: 2;
    max-width: 100%;
    height: auto;
    max-height: 50px;
    border-style: none;
    object-fit: cover;
  }


  .login:hover {
    transform: scale(1.5);
  }
</style>

<div class="navbar navbar-dark">
  <ul class="navbar-nav">
    <a href="/">
      <img class="logo" src="/img/logo.png" alt="wow"></a>
    <a href="/login">
      <!-- <img class="login" src="/img/login.png" alt=""></a> -->
      <a href="/login" class="nav-link text-dark {{ ($active === 'login') ? 'active' : '' }}" style="cursor: pointer;
      font-size: 30px;
    position: absolute;
    top: 25px;
    right: 20px;
    z-index: 2;"><i class=" bi bi-box-arrow-in-right"></i> Login</a>
  </ul>
</div>
<nav class="navbar navbar-expand-md navbar-dark bg-primary rounded-pill d-flex justify-content-between">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav" style="font-family: Montserrat;
    font-weight: 600;
    font-size: 25px;">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'home') ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'about') ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'posts') ? 'active' : '' }}" href="/posts">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'categories') ? 'active' : '' }}" href="/categories">Categories</a>
        </li>
      </ul>
    </div>
    <form action="/posts" class="form-inline">
      <div class="input-group">
        <input type="text" class="form-control me-2" name="search" placeholder="Search.." value="{{ request('search') }}">
        <button class="btn btn-secondary rounded-pill" type="submit">Search</button>
      </div>
    </form>
  </div>
</nav>