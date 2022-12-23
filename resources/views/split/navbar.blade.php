<div class="navbar navbar-dark">
  <div class="container">
    <img src=" /img/logo.png" style="    max-width: 100%;
    height: auto;
    max-height: 110px;
    vertical-align: middle;
    border-style: none;
    object-fit: cover;" alt=" wow">
  </div>
</div>
<nav class=" navbar navbar-expand-lg navbar-dark bg-primary" style="border-radius: 10px">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
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
    <form action="/posts" class="d-flex align-left">
      <div class="input-group">
        <input type="text" class="form-control me-2" name="search" placeholder="Search.." value="{{ request('search') }}">
        <button class="button" style="border-radius: 10px;" type="submit">Search</button>
      </div>
    </form>
  </div>
</nav>