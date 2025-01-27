<div class="h4 fw-bold mt-4 ">
    Categories
</div>
<div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3 mt-1">
    @foreach($categories as $category)
        <div class="col">
            <div class="bg-white p-4 rounded fw-bold">
                <a href="{{ route("category.show", $category->slug) }}">
                    {{ $category->name }}
                </a>
            </div>
        </div>
    @endforeach
</div>
