<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                        <div class="container py-5 h-100">
                          <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col">
                              <div class="card" id="list1" style="border-radius: .75rem; background-color: #eff1f2;">
                                <div class="card-body py-4 px-4 px-md-5">
                      
                                  <p class="h1 text-center mt-3 mb-4 pb-3 text-primary">
                                    <i class="fas fa-check-square me-1"></i>
                                    <u>My Todo-s</u>
                                  </p>
                      
                                  <div class="pb-2">
                                    <div class="card">
                                      <div class="card-body">
                                        <form method="POST" action="{{ route("dashboard.store") }}" class="d-flex flex-row align-items-center">
                                          @csrf
                                          <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1"
                                            placeholder="Add new..." name="description">
                                          <div class="ml-4">
                                            <button class="btn btn-primary">Add</button>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                      
                                  <hr class="my-4">
                      
                                  <ul class="rounded-0 bg-transparent">
                                    @foreach ($todos as $key=>$todoItem)
                                    <li
                                      class="w-100 list-group-item d-flex align-items-center ps-0 pe-3 py-1 rounded-0 border-0 bg-transparent">
                                      <div class="form-check">
                                        <input class="form-check-input me-0" type="checkbox" value="" id="flexCheckChecked1"
                                          aria-label="..." checked />
                                      </div>
                                      <p class="lead fw-normal mb-0">{{ $todoItem['description'] }}</p>
                                      
                                      <div class="d-flex flex-row justify-content-end ml-auto">
                                        <a href="{{ route('dashboard.delete', ['id' => $todoItem->id]) }}" class="text-danger ml-2" data-mdb-toggle="tooltip" title="Delete todo">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                              </svg>
                                        </a>
                                      </div>
                                    </li>
                                    @endforeach
                                  </ul>
                      
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
