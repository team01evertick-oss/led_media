@push('scripts')

<script>

document.addEventListener('DOMContentLoaded', function () {

    const dropdowns = document.querySelectorAll('.dropdown-custom');

    dropdowns.forEach(dropdown => {

        const trigger = dropdown.querySelector('.dropdown-toggle-custom');

        trigger.addEventListener('click', function (e) {

            e.preventDefault();

            dropdowns.forEach(item => {

                if(item !== dropdown){
                    item.classList.remove('active');
                }

            });

            dropdown.classList.toggle('active');

        });

    });

});

</script>

@endpush