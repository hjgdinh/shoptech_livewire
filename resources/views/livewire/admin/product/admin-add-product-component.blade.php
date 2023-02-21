<div id="wrapper">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                    For more information about DataTables, please visit the <a target="_blank"
                        href="https://datatables.net">official DataTables documentation</a>.</p>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary" role="alert">Create Product</h6>
                    </div>
                    <div class="card-body">
                        {{-- @if (Session::has('message'))
                            <div class="alert alert-success">{{ Session::get('message') }}</div>
                        @endif --}}
                        <div class="table-responsive">
                            <form method="post" enctype="multipart/form-data" wire:submit.prevent="addProduct">
                                @csrf
                                <label>Tên: (<span class="ss_red">*</span>)</label>
                                <label for="" style="width: 100%;">
                                    <input class="form-control" type="text" wire:model="name" wire:keyup="autoSlug"
                                        placeholder="Enter your name" required>
                                </label>
                                <label>Slug: (<span class="ss_red">*</span>)</label>
                                <label for="" style="width: 100%;">
                                    <input class="form-control" type="text" wire:model="slug"
                                        placeholder="" required>
                                </label>
                                <label>Giá: (<span class="ss_red">*</span>)</label>
                                <label for="" style="width: 100%;">
                                    <input class="form-control" type="number" wire:model="price"
                                        placeholder="Enter your price" required>
                                </label>
                                <label>Mô tả: (<span class="ss_red">*</span>)</label>
                                <label for="" style="width: 100%;">
                                    <input class="form-control" type="text" wire:model="description"
                                        placeholder="Enter your description" required>
                                </label>
                                <div>
                                    <label>Loại sản phẩm: (<span class="ss_red">*</span>)</label>
                                    <select wire:model="category_id" class="form-control">
                                        <option value="" disabled>----- Loại -----</option>
                                        @foreach ($category as $item)
                                            <option value="{{ $item->id }}" disabled>{{ $item->name }}</option>
                                            @foreach ($item->children as $child)
                                                <option value="{{ $child->id }}">-- {{ $child->name }}</option>
                                                @foreach ($child->children as $schild)
                                                    <option value="{{ $schild->id }}">--- {{ $schild->name }}</option>
                                                @endforeach
                                            @endforeach
                                        @endforeach
                                    </select>
                                </div>
                                <label for="">
                                    <div class=" form-group">
                                        <label for="attachment" class="upload__btn">
                                            <label class="form-label mt-4">Profile Photo:(<span
                                                    class="ss_red">*</span>)</label>
                                            <input type="file" name="image[]" id="attachment" class="form-control"
                                                multiple="" style="padding:4px" required>
                                        </label>
                                        <div id="files-area" class="mt-xl-4">
                                            <div id="filesList">
                                                <div id="files-names" class="row"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        const dt = new DataTransfer();

                                        $("#attachment").on("change", function(e) {
                                            for (var i = 0; i < this.files.length; i++) {
                                                let fileBloc = $("<div/>", {
                                                        class: "file-block col-lg-2 col-md-3 col-12",
                                                        style: "max-width:50%",
                                                    }),
                                                    fileName = $("<span/>", {
                                                        class: "name",
                                                        style: "display:none",
                                                        text: this.files.item(i).name,
                                                    });
                                                let img = URL.createObjectURL(this.files[i]);
                                                fileBloc.append(`
                                                    <label class="file-delete" style="margin-bottom:5px">
                                                        <button style="border: 1px solid silver;padding: 5px;margin: 5px 0 0;border-radius: 4px;text-align: center;">Xóa</button>
                                                    </label>`)
                                                    .append(fileName).append('<br>').append(
                                                        `
                                                    <div class="ss_item" style="margin-bottom:5px">
                                                        <label for="img1" style="width: 100%;min-height: 5rem;">
                                                        <img class="ss_thumbnail" src="${img}" style="width:200px"></label>
                                                    </div>
                                                    <span class="name" type="text">${this.files.item(i).name}</span>`
                                                    );
                                                // .append(fileName).append(`<img src="${img}" alt="" width="100px">`);
                                                $("#filesList > #files-names").append(fileBloc);
                                            }

                                            // Ajout des fichiers dans l'objet DataTransfer
                                            for (let file of this.files) {
                                                dt.items.add(file);
                                            }
                                            // Mise à jour des fichiers de l'input file après ajout
                                            this.files = dt.files;

                                            // EventListener pour le bouton de suppression créé
                                            $("label.file-delete").click(function() {
                                                let name = $(this).next("span.name").text();
                                                // Supprimer l'affichage du nom de fichier
                                                $(this).parent().remove();
                                                for (let i = 0; i < dt.items.length; i++) {
                                                    if (name === dt.items[i].getAsFile().name) {
                                                        // Suppression du fichier dans l'objet DataTransfer
                                                        dt.items.remove(i);
                                                        continue;
                                                    }
                                                }
                                                // Mise à jour des fichiers de l'input file après suppression
                                                document.getElementById("attachment").files = dt.files;
                                            });
                                        });
                                    </script>
                                </label><br>
                                <button class="btn btn-primary" type="submit">
                                    Submit
                                </button>
                                <a class="btn btn-primary" href="{{ route('admin.product') }}">
                                    Back
                                </a>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
    </div>
</div>
