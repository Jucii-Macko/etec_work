@extends('Backend.master')
@section('title_page','Dashboard')
@section('title_side','Dashboard')
@section('content')
     <main class="flex-1 ">
            <!-- Header -->
            <header class="mb-8">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-3xl font-serif font-black text-foreground">Students Dashboard</h1>
                        <p class="text-muted-foreground mt-1"></p>
                    </div>
                    <button class="bg-primary text-primary-foreground px-4 py-2 rounded-lg font-medium hover:bg-primary/90 transition-colors">
                        Add Student
                    </button>
                </div>
            </header>
     </main>
@endsection