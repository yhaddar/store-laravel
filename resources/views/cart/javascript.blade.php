<script>
    // remove data
    $('#quantity').change(function (e) {
        e.preventDefault();

        var ele = $(this);
            $.ajax({
                url: "{{ route('updateCart') }}",
                method: 'put',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents('tr').attr('data-id'),
                    quantity: ele.parents('tr').find('#qunatity').val()
                },
                success: function(response) {
                    window.location.reload()
                }
            })
        }
    )

    // update data
    $('.btn_delete').click(function (e) {
        e.preventDefault();

        var ele = $(this);
        if (confirm('do you want really remove from cart ?')) {
            $.ajax({
                url: "{{ route('RemoveFromCart') }}",
                method: 'delete',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents('tr').attr('data-id')
                },
                success: function(response) {
                    window.location.reload()
                }
            })
        }
    })
</script>
