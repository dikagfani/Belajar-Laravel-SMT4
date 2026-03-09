@foreach ($posts as $post)
    <h2>{{ $post -> judul }}</h2>
    <p>{{ $post -> isi }}</p>
@endforeach