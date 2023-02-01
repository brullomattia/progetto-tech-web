<form action="{{ route('images.store') }}" method="POST" class="bg-gray-200 p-6  space-x-5 my-2" enctype="multipart/form-data" id="showCaseForm">
                        @csrf
                            <header class="flex items-center">
                                <img src="/images/lary-avatar.svg" alt="" class="rounded-full">

                                <h2 class="ml-6 font-bold" id = "formTitle"> Ciao {{auth()->user()->username}}, inserisci un aneddoto e condividilo con la community!</h2>
                            </header>

                            <div class="mt-6">
                                <textarea required name="text" rows="5" class="w-full text-sm" placeholder="Scrivi un aneddoto..."></textarea>
                                <div class="image">

                                    <input type="file" class="form-control my-2.5" required name="image" placeholder="image">
                                    </div>

                            </div>

                            <div>
                                <button type="submit" class="bg-red-600 bottom-3  px-8 py-1.5 right-3  text-white">
                                    INSERISCI IN BACHECA
                                </button>
                            </div>
</form>
<style>

    #showCaseForm{
        box-shadow:	0 0.125rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
    margin:1%;
    padding:0.5%;
    background: rgba(255, 255, 255, 0.7);
    }

    #formTitle{
    border-bottom: 2px solid rgb(190, 3, 3);
    font-size:20px;
    font-weight:bold;
    color:rgb(190, 3, 3);
    }
    </style>
