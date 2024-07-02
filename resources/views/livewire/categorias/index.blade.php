<div>
    <div>
        <h3 class="title">Categorías</h3>
        <button wire:click="vista_crear()" class="btn btn-primary"> <i class="fa fa-plus"></i> Nueva Categoría</button>
    </div>
    {{-- Minimal --}}
 
    <div class="row bg bg-soft-success">
        <div class="col-md-4 p-2">
            @foreach($categorias as $categoria)
            <div class="card">
                <div class="card-body">
                    <div class="card-box bg-{{ $loop->index % 2 == 0 ? 'soft-purple' : 'soft-blue' }} mb-2 p-3 rounded">
                        <h5 class="mb-2">  {{ $categoria->nombre }}</h5>
                        <button wire:click="vista_editar({{ $categoria->id }})" class="btn btn-primary">Editar</button>
                        <button wire:click="eliminar_categoria({{ $categoria->id }})" class="btn btn-danger">Eliminar</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @if($show_vista)
    <div class="modal fade show d-block" tabindex="-1" role="dialog" aria-labelledby="createCategoryModalLabel" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.5);">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background-color: cadetblue; color: white;">
                <div class="modal-header">
                    <h4 class="modal-title" id="createCategoryModalLabel">CREAR NUEVA CATEGORÍA</h4>
                    <button wire:click="$set('show_vista', false)" type="button" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input wire:model="nombre" name="nombre" type="text" class="form-control">
                        @error('nombre') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button wire:click="$set('show_vista', false)" type="button" class="btn btn-secondary">Cancelar</button>
                    <button wire:click="crear_categoria()" type="button" class="btn btn-success">Crear Categoría</button>
                </div>
            </div>
        </div>
    </div>
    @endif

    @if($show_editar)
    <div class="modal fade show d-block" tabindex="-1" role="dialog" aria-labelledby="editCategoryModalLabel" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.5);">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background-color: cadetblue; color: white;">
                <div class="modal-header">
                    <h4 class="modal-title" id="editCategoryModalLabel">EDITAR CATEGORÍA</h4>
                    <button wire:click="$set('show_editar', false)" type="button" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nombre_seleccionda">Nombre:</label>
                        <input wire:model="nombre_seleccionda" name="nombre_seleccionda" type="text" class="form-control">
                        @error('nombre_seleccionda') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button wire:click="$set('show_editar', false)" type="button" class="btn btn-secondary">Cancelar</button>
                    <button wire:click="editar_categoria" type="button" class="btn btn-success">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    @endif

    <script>
        document.addEventListener('livewire:initialized', () => {
            Livewire.on('categoria-creada', (message) => {
                alert(message);
            });
            Livewire.on('categoria-error', (message) => {
                alert(message);
            });
            Livewire.on('categoria-actualizado', (message) => {
                alert(message);
            });
            Livewire.on('categoria-eliminada', (message) => {
                alert(message);
            });
        });
    </script>
</div>