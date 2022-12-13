<form action="{{ route('images.store') }}" method="POST" class="bg-gray-200 p-6 rounded-3xl space-x-5 my-2" enctype="multipart/form-data" >
                        @csrf 
                            <header class="flex items-center">
                                <img src="/images/lary-avatar.svg" alt="" class="rounded-full">

                                <h2 class="ml-6 font-bold "> Ciao {{auth()->user()->username}}, inserisci un aneddoto e condividilo con la community!</h2>
                            </header>

                            <div class="mt-6">
                                <textarea required name="text" rows="5" class="w-full text-sm" placeholder="Scrivi un aneddoto..."></textarea>
                                <div class="image">
                                    
                                    <input type="file" class="form-control my-2.5" required name="image" placeholder="image">
                                    </div>
                                
                            </div>

                            <div>
                                <button type="submit" class="bg-blue-500 bottom-3  px-8 py-1.5 right-3 rounded text-white">
                                    INSERISCI IN BACHECA
                                </button>
                            </div>