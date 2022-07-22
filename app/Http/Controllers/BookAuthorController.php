<?php

namespace App\Http\Controllers;

use App\Models\BookAuthor;
use App\Http\Requests\StoreBookAuthorRequest;
use App\Http\Requests\UpdateBookAuthorRequest;

class BookAuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookAuthorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookAuthorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookAuthor  $bookAuthor
     * @return \Illuminate\Http\Response
     */
    public function show(BookAuthor $bookAuthor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookAuthor  $bookAuthor
     * @return \Illuminate\Http\Response
     */
    public function edit(BookAuthor $bookAuthor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookAuthorRequest  $request
     * @param  \App\Models\BookAuthor  $bookAuthor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookAuthorRequest $request, BookAuthor $bookAuthor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookAuthor  $bookAuthor
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookAuthor $bookAuthor)
    {
        //
    }
}
