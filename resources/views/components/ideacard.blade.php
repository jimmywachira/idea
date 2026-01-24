<a {{$attributes->merge(['class' => 'card w-96'])}}>
   <div class="card-body items-center">
        <h2 class="card-title">{{ $slot }}</h2>
         
        <div class="card-actions justify-end">
         <button class="btn btn-primary">View Idea</button>
         </div>
     </div>
</a>