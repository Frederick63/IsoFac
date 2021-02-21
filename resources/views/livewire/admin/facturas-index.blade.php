<div class="card">

        <div class="card-header">
                <input wire:model="search" class="form-control" placeholder="Nº Factura, Fecha Factura, Albaranes o Importe">
        </div>
    
        @if ($facturas->count())
            
            <div class="card-body">              

                <table class="table table-striped">
                        <thead class="bg-gray-300 border-b border-gray-500">
                            <tr class="text-xs font-medium text-gray-800 uppercase text-left tracking-wider">
                                <th class="px-6 py-3"></th>
                                <th class="px-6 py-3">DocNo</th>
                                <th class="px-6 py-3">Codigo Cliente</th> 
                                <th class="px-6 py-3">Fecha</th>
                                <th class="px-6 py-3">Num. Factura</th>
                                <th class="px-6 py-3">Albaranes Factura</th>
                                <th class="px-6 py-3">Importe</th>
                                <th></th>     
                            </tr>   
                        </thead>
        
                        <tbody class="divide-y divide-gray-400">
                            @foreach ($facturas as $factura)
                                <tr class="text-sm text-gray-800">

                                <form action="{{route('admin.facturas.show')}}" method="post">
                                        @csrf
                                    <td class="px-6 py-4">  
                                        <input name="facturaDocNo" type="hidden" value={{$factura->DocNo}}>                         
                                        <button type="submit" class="btn btn-primary btn-sm">Descargar</button>              
                                    </td> 
                                </form>
                                                           
                                    <td class="px-6 py-4">{{$factura->DocNo}}</td>
                                    <td class="px-6 py-4">{{$factura->Cod_Clien_Temp}}</td>
                                    <td class="px-6 py-4">{{$factura->Fecha_Factura}}</td>
                                    <td class="px-6 py-4">{{$factura->N_Factura}}</td>
                                    <td class="px-6 py-4">{{$factura->Albaranes_Relacionados}}</td>
                                    <td class="px-6 py-4">{{$factura->Importe_Factura}}</td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                   
            </div>
    
            <div class="card-footer">
                {{$facturas->links()}}
            </div>
                
        @else
            <div class="card-body">
                <strong>No hay ningun registro...</strong>
            </div>
    
        @endif
        
</div>
