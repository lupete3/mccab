<x-layouts.app>
    <x-slot name="title">Add About Section</x-slot>

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Add About Section</h5>
            <small class="text-muted float-end">Add a new about section</small>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.abouts.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="subtitle">Subtitle</label>
                    <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Subtitle" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="video_url">Video URL</label>
                    <input type="url" class="form-control" id="video_url" name="video_url" placeholder="https://youtube.com/..." required />
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Features (List Items)</label>
                    <div id="features-container">
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" name="features[]" placeholder="Feature item">
                            <button class="btn btn-outline-danger remove-feature" type="button">Remove</button>
                        </div>
                    </div>
                    <button type="button" class="btn btn-outline-primary btn-sm" id="add-feature">Add Feature</button>
                </div>

                <button type="submit" class="btn btn-primary">Add About Section</button>
                <a href="{{ route('admin.abouts.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('features-container');
            const addButton = document.getElementById('add-feature');

            addButton.addEventListener('click', function() {
                const div = document.createElement('div');
                div.className = 'input-group mb-2';
                div.innerHTML = `
                    <input type="text" class="form-control" name="features[]" placeholder="Feature item">
                    <button class="btn btn-outline-danger remove-feature" type="button">Remove</button>
                `;
                container.appendChild(div);
            });

            container.addEventListener('click', function(e) {
                if (e.target.classList.contains('remove-feature')) {
                    e.target.parentElement.remove();
                }
            });
        });
    </script>
</x-layouts.app>
