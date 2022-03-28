 <!-- Main modal -->
 <div class="hidden" id="modal">
     <div tabindex="0" class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">
         <div class="z-50 relative p-3 mx-auto my-0 max-w-full" style="width: 600px;">
             <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden">
                 <button onclick="toggleModal(0)"
                     class="fill-current h-6 w-6 absolute right-0 top-0 m-6 font-3xl font-bold">&times;</button>
                 <div class="px-6 py-3 text-xl border-b font-bold">Registrar premio</div>
                 <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8">
                     @csrf
                     <div>
                         <label for="name"
                             class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nombre</label>
                         <input type="text" name="name" id="name"
                             class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                             placeholder="Juan" required>
                         <span class="error text-danger d-none"></span>
                     </div>
                     <div>
                         <label for="lastname"
                             class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Apellido</label>
                         <input type="text" name="lastname" id="lastname"
                             class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                             placeholder="García">
                         <span class="error text-danger d-none"></span>
                     </div>
                     <div>
                         <label for="address"
                             class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Dirección</label>
                         <input type="text" name="address" id="address"
                             class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                             placeholder="Cll 24#45-89 Av. Las Américas">
                         <span class="error text-danger d-none"></span>
                     </div>
                     <div>
                         <label for="phone"
                             class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Teléfono</label>
                         <input type="text" name="phone" id="phone"
                             class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                             placeholder="3240589546">
                         <span class="error text-danger d-none"></span>
                     </div>
                     <div>
                         <label for="email"
                             class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Correo
                             Electrónico</label>
                         <input type="email" name="email" id="email"
                             class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                             placeholder="juan@mail.com" required>
                         <span class="error text-danger d-none"></span>
                     </div>
                     <input type="hidden" name="award_name" id="award_name">
                     <button type="submit"
                         class="w-full btn-submit text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Guardar</button>
                 </form>
                 <div class="px-6 py-3 border-t">
                     <div class="flex justify-end">
                         <button onclick="toggleModal(0)" type="button"
                             class="bg-gray-700 text-gray-100 rounded px-4 py-2 mr-1">Cerrar</Button>
                     </div>
                 </div>
             </div>
         </div>
         <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50"></div>
     </div>
 </div>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script>
     function toggleModal(name) {
         console.log("name", name);
         if (name != 0) {
             document.getElementById('award_name').value = name;
         }
         document.getElementById('modal').classList.toggle('hidden')
     }

     $(".btn-submit").click(function(e) {

        e.preventDefault();

        var name = $("input[name=name]").val();
        var lastname = $("input[name=lastname]").val();
        var address = $("input[name=address]").val();
        var phone = $("input[name=phone]").val();
        var email = $("input[name=email]").val();
        var award = $("input[name=award_name]").val();

        $.ajax({
             type: 'POST',
             url: "{{ route('award') }}",
             data: {
                 name: name,
                 lastname: lastname,
                 address: address,
                 phone: phone,
                 email: email,
                 award: award,
                 _token: '{{ csrf_token() }}'
             },
            success: function(data) {
                $(modal).hide();
                alert("Registrado");
                $('#modal').find('form').trigger('reset');
                setTimeout(() => {
                    window.location = '/awards';
                }, 1000);


            },
            error: function(err) {
                $.each(err.responseJSON.errors, function(key, value) {
                    $("#" + key).next().html(value[0]);
                    $("#" + key).next().removeClass('d-none');
                });
            },
         });

     });
 </script>
