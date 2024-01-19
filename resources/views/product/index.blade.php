@extends('layouts.app')

@section('content')

<!-- <h1 class="text-center mt-2">All Products</h1> -->
<div class="content-header">
		<div class="container-fluid mt-3 mb-3">
			<div class="row">
				<div class="col-sm-6">
					<h1 class="m-0">All Products</h1>
				</div><!-- /.col -->
				<div class="col-sm-6 float-right" style="padding: right 11px; margin-left=1px; margin-top=8px;">
					<a href="{{ route('products.create') }}" class="btn btn-success float-right">Create</a>
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
											<th>Title</th>
											<th>Price</th>
											<th>Description</th>
                      <th>Action</th>
										</tr>
									</thead>

									<tbody>
										@foreach ($products as $product)
										<tr>
											<td>{{ $product->title }}</td>
											<td>{{ $product->price }}</td>
											<td>{{ $product->description }}</td>
                      <td>
                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info btn-xs"> Edit
                                            </a>
                                            <a href="{{ route('products.destroy', $product->id) }}" class="btn btn-danger btn-xs"> Delete
                                            </a>
                                            
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