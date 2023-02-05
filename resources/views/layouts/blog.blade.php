<section class="flex flex-col justify-between gap-6 sm:mt-10 xl:mt-0 xl:w-1/2">
@foreach ($blogs as $blog)
<section class="flex items-start gap-6">
  <img src="{{ asset($blog->image) }}" alt="{{ asset($blog->image) }}">
  <section>
      <p class="mb-4 text-slate-300">September 2, 2022</p>
      <h4 class="mb-4 font-bold">{{$blog->title}}</h4>
      <p>{{$blog->content}}</p>
  </section>
</section>
@endforeach
</section>

