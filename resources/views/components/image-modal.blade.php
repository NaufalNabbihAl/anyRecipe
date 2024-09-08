<div id="image-modal" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
    <div class="bg-white p-4 rounded">
        <img id="modal-image" src="" alt="Image" class="max-w-full h-auto" />
        <button id="close-modal" class="mt-2 px-4 py-2 bg-gray-500 text-white rounded">Close</button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('image-modal');
        const modalImage = document.getElementById('modal-image');
        const closeModal = document.getElementById('close-modal');

        console.log("Loaded");
        

        document.querySelectorAll('.image-column img').forEach(img => {
            img.addEventListener('click', function() {
                modalImage.src = this.src;
                modal.classList.remove('hidden');
            });
        });

        closeModal.addEventListener('click', function() {
            modal.classList.add('hidden');
        });
    });
</script>

<style>
    #image-modal {
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1000;
    }

    #image-modal.hidden {
        display: none;
    }

    #image-modal .bg-white {
        max-width: 90%;
        max-height: 90%;
        padding: 20px;
        border-radius: 8px;
        background: white;
        position: relative;
    }

    #image-modal img {
        max-width: 100%;
        height: auto;
    }

    #close-modal {
        position: absolute;
        top: 10px;
        right: 10px;
        background: #ccc;
        border: none;
        border-radius: 4px;
        padding: 5px 10px;
        cursor: pointer;
    }
</style>
