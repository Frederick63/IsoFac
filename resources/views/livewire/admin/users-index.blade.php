<div class="card">

    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Nombre, Email, Código cliente">
    </div>

    @if ($users->count())
        
        <div class="card-body">
            <table class="table table-striped" data-toggle="dataTable" data-form="deleteForm">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Código Cliente</td>
                        <td>Email</td>
                        <td>Confirmación Email</td>
                        <td>Cuenta creada en</td>
                        <td></td>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->cod_client}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->email_verified_at}}</td>
                        <td>{{$user->created_at}}</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.users.edit',$user)}}">Editar</a>
                        </td>
                        <td width="10px">

                            {{-- <form action="{{route('admin.users.destroy',$user)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form> --}}
            
                                {!! Form::model($user, ['method' => 'delete', 'route' => ['admin.users.destroy', $user->id], 'class' =>'form-inline form-delete']) !!}
                                {!! Form::submit(trans('Eliminar'), ['class' => 'btn btn-danger btn-sm', 'name' => 'delete_modal']) !!}
                                {!! Form::close() !!}                           

                        </td>
                    </tr>
                        
                    @endforeach
                    
                </tbody>
            </table>


            <div class="modal" id="confirm">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Confirmar eliminación Usuario</h4>
                        </div>
                        <div class="modal-body">
                            <p>Está seguro que quiere Borrar este Usuario?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-danger" id="delete-btn">Eliminar</button>
                            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>




        </div>

        <div class="card-footer">
            {{$users->links()}}
        </div>
            
    @else
        <div class="card-body">
            <strong cla>No hay ningun registro...</strong>
        </div>

    @endif
</div>
