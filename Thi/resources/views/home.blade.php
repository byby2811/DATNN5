@extends('layout')
@section('title', 'Product | Thời trang')
@section('title2', 'Danh sách sản phẩm')
@section('content')

<div class="container">

<section class="hot-genres">
            <h2>Hot Genres</h2>
            <div class="genre-grid">
                <div class="genre">
                    <i class="fas fa-fire"></i>
                    <p>Hành động</p>
                </div>
                <div class="genre">
                    <i class="fas fa-heart"></i>
                    <p>Hài hước</p>
                </div>
                <div class="genre">
                    <i class="fas fa-star"></i>
                    <p>Tâm lí</p>
                </div>
                <div class="genre">
                    <i class="fas fa-star"></i>
                    <p>Kinh dị</p>
                </div>
                <div class="genre">
                    <i class="fas fa-star"></i>
                    <p>Điện ảnh</p>
                </div>
            </div>
        </section>
        <section class="favorite-movies">
            <h2>Favorite Movies</h2>
            <div class="movie-grid">
                <div class="movie">
                    <img src="img/chichiemem2.webp" alt="Movie 1" />
                    <h3>Movie 1</h3>
                    <p>Category: Action</p>
                    <p>Views: 1000</p>
                </div>
                <div class="movie">
                    <img src="img/connhot.webp" alt="Movie 2" />
                    <h3>Movie 2</h3>
                    <p>Category: Comedy</p>
                    <p>Views: 1500</p>
                </div>
                <div class="movie">
                    <img src="img/datrung.webp" alt="Movie 3" />
                    <h3>Movie 3</h3>
                    <p>Category: Drama</p>
                    <p>Views: 800</p>
                </div>
            </div>
        </section>

        <section class="popular-movies">
            <h2>Popular Movies</h2>
            <div class="movie-grid">
                <div class="movie">
                    <img src="img/datrung.webp" alt="Movie 3" />
                    <h3>Movie 3</h3>
                    <p>Category: Drama</p>
                    <p>Views: 800</p>
                </div>
                <div class="movie">
                    <img src="img/nhabanu.webp" alt="Movie 4" />
                    <h3>Movie 4</h3>
                    <p>Category: Action</p>
                    <p>Views: 1200</p>
                </div>
                <div class="movie">
                    <img src="img/trotan.webp" alt="Movie 4" />
                    <h3>Movie 4</h3>
                    <p>Category: Action</p>
                    <p>Views: 1200</p>
                </div>
            </div>
        </section>

@endsection


