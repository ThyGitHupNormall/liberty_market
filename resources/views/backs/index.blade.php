@extends('backs.backs_layout.layout')
@section('content')
@include('backs.backs_layout.header')
@include('backs.backs_layout.left-side-bar')


<div class="mobile-menu-overlay"></div>

<div class="main-container">
        <div class="card-box pb-10">
            <div class="h5 pd-20 mb-0">Liberty NFT Market</div>
            <a href="update" class="btn btn-primary mx-5" target="update">Insert Data</a>
            <table class="data-table table nowrap">
                <thead>
                    <tr>

                        <th class="table-plus">No</th>
                        <th class="table-plus">ID</th>
                        <th class="table-plus">Label</th>
                        <th class="table-plus">Title</th>
                        <th class="table-plus">Description</th>
                        <th class="table-plus">Img</th>
                        <th class="table-plus">Bg Img</th>
                        <th class="table-plus">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($homeb as $h)
                    <tr>

                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>
                              {{ $h->id }}
                        </td>
                        <td>
                            {{ $h->label }}
                        </td>
                        <td>
                            {{ $h->title }}
                        </td>
                        <td>
                            {{ $h->desriptions }}
                        </td>
                        <td>
                            {{ $h->img }}
                        </td>
                        <td>
                            {{ $h->bg_img }}
                        </td>
                        <td>
                            <a href="update" class="btn btn-success" target="update">Update</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>

                    </tr>
                    @endforeach

                </tbody>

            </table>

        </div>
</div>
<div class="main-container">
    <div class="card-box pb-10">
        <div class="h5 pd-20 mb-0">Liberty NFT Market</div>
        <a href="update" class="btn btn-primary mx-5" target="update">Insert Data</a>
        <table class="data-table table nowrap">
            <thead>
                <tr>

                    <th class="table-plus">No</th>
                    <th class="table-plus">ID</th>
                    <th class="table-plus">Label</th>
                    <th class="table-plus">Title</th>
                    <th class="table-plus">Description</th>
                    <th class="table-plus">Img</th>
                    <th class="table-plus">Bg Img</th>
                    <th class="table-plus">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($homeb as $h)
                <tr>

                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                          {{ $h->id }}
                    </td>
                    <td>
                        {{ $h->label }}
                    </td>
                    <td>
                        {{ $h->title }}
                    </td>
                    <td>
                        {{ $h->desriptions }}
                    </td>
                    <td>
                        {{ $h->img }}
                    </td>
                    <td>
                        {{ $h->bg_img }}
                    </td>
                    <td>
                        <a href="update" class="btn btn-success" target="update">Update</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>

                </tr>
                @endforeach

            </tbody>

        </table>

    </div>
</div>


@endsection
