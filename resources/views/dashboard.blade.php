<x-layout.app>
    <div>
        <h1>dashboard</h1>
        <p>Bem vindo {{ $user->name }}</p>
        <ul>
            @foreach ($links as $link)
                <li><a href="{{ $link->link }}" target="_blank">{{ $link->id }}. {{ $link->name }}</a></li>
            @endforeach
        </ul>
        <button command="show-modal" commandfor="dialog"
            class="rounded-md bg-white/10 px-2.5 py-1.5 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20">
            Cadastrar novo link
        </button>
        <el-dialog>
            <dialog id="dialog" aria-labelledby="dialog-title"
                class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
                <el-dialog-backdrop
                    class="fixed inset-0 bg-primary/75 backdrop-blur-xs transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

                <div tabindex="0"
                    class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
                    <el-dialog-panel
                        class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                        <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <h3 id="dialog-title" class="text-base font-semibold text-white">Cadastrar novo link
                                    </h3>
                                    <div class="mt-2">
                                        <form action="{{ route('links.create') }}" method="post" id="form">
                                            @csrf
                                            <label for="">
                                                <span>Link</span>
                                                <input name="link" placeholder="Link" class="w-full" type="text">
                                                @error('link')
                                                    <span>{{ $message }}</span>
                                                @enderror
                                            </label>
                                            <br>
                                            <label for="">
                                                <span>Nome</span>
                                                <input name="name" placeholder="Name" class="w-full" type="text">
                                                @error('name')
                                                    <span>{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                            <button type="submit" form="form"
                                class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Cadastrar</button>
                            <button type="button" command="close" commandfor="dialog"
                                class="mt-3 inline-flex w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20 sm:mt-0 sm:w-auto">Cancel</button>
                        </div>
                    </el-dialog-panel>
                </div>
            </dialog>
        </el-dialog>
        <br>
        <a href="{{ route('logout') }}">Sair</a>
        <br>
    </div>
</x-layout.app>
