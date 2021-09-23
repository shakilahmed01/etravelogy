@extends('layouts.app')
@section('content')
<table class="table table-hover product_item_list c_table theme-color mb-0">
  <h4 class=" card">Make a Call For Check avaibility </h4>
  <br>
  <br>
  <br>
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th data-breakpoints="sm xs"> Name</th>
                                        <th data-breakpoints="sm xs">Country</th>
                                        <th data-breakpoints="xs">Email</th>
                                        <th data-breakpoints="xs md">Hotel</th>
                                        <th data-breakpoints="sm xs md">Room</th>
                                        <th data-breakpoints="sm xs md">Adult</th>
                                        <th data-breakpoints="sm xs md">Child</th>
                                        <th data-breakpoints="sm xs md">Check In</th>
                                        <th data-breakpoints="sm xs md">Check Out</th>
                                        <th data-breakpoints="sm xs md">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                  @forelse($lists as $list)


                                    <tr>
                                        <td>
                                          <span class="list-name">{{ $list->id }}</span>

                                        </td>
                                        <td><span class="badge badge-warning">{{ $list->name }}</span>
                                            <!-- <span class="text-muted">Florida, United States</span> -->
                                        </td>
                                        <td><span class="badge badge-warning">{{ $list->country }}</span>
                                            <!-- <span class="text-muted">Florida, United States</span> -->
                                        </td>

                                        <td>
                                            <span class="badge badge-success">{{ $list->email }}</span>
                                        </td>

                                        <td>
                                            <span class="badge badge-success">{{ $list->hotel }}</span>
                                        </td>

                                        <td>
                                            <span class="badge badge-info">{{ $list->room }}</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-info">{{ $list->adults }}</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-info">{{ $list->childrens }}</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-info">{{ $list->checkin }}</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-info">{{ $list->checkout }}</span>
                                        </td>








                                        <!-- <td>
                                            <span class="badge badge-success">{{ $list->created_at }}</span>
                                        </td> -->

                                        <td>
                                          <!-- <a href="{{ url('stripe-payment') }}/{{ $list->id }}/{{ $list->slug }}" class=" btn-sm btn-primary">Click for Pay here</a> -->
                                          <a href="tel:+01680419920" class=" btn-sm btn-primary">Make a Call</a>
                                        </td>
                                      </tr>

                                  @endforeach



                                </tbody>
                            </table>

                            <div class="card">
                        <div class="body">
                             {{ $lists->links() }}
                        </div>
                    </div>
@endsection
