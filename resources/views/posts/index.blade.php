@extends('layouts.app')

@section('content')

<!-- <h1 class="text-center mt-2">All Products</h1> -->
<div class="content-header">
		<div class="container-fluid mt-3 mb-3">
			<div class="row">
				<div class="col-sm-6">
					<h1 class="m-0">All Posts</h1>
				</div><!-- /.col -->
				<div class="col-sm-6 float-right" style="padding: right 11px; margin-left=1px; margin-top=8px;">
					<a href="{{ route('posts.create') }}" class="btn btn-success float-right">Create</a>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
<hr>
<br>




  <section class="content">
		<div class="container-fluid">
					<div>
						<div>
							<div class="table-responsive">
								<table id="data" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th>Name</th>
											<th>Price</th>
											<th>Description</th>
                                            <th></th>
										</tr>
									</thead>

									<tbody>
										@foreach ($posts as $post)
										<tr>
											<td>{{ $post->name }}</td>
											<td>{{ $post->price }}</td>
											<td>{{ $post->description }}</td>
                                            <td>
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info btn-xs"> Edit
                                            </a>
                                            <form action="{{ route('posts.destroy', $post->id) }}" method="post" style="display: inline-block;">
                                                   @csrf
                                                   @method('DELETE')
                                                  <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                                            </form>
                                            
                                            </td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>

				</div>				
		</div>
	</section>


@endsection