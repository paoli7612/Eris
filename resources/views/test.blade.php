<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseNew" aria-expanded="true"
    aria-controls="collapseNew"> Collapsible Group Item #1 </button>
<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSearch"
    aria-expanded="false" aria-controls="collapseSearch"> Collapsible Group Item #2 </button>

<div class="accordion" id="accordionLessons">
    <div id="collapseNew" class="collapse bg-white " data-parent="#accordionLessons">
        <div class="p-3 bg-white shadow">
            {{ __('New lesson') }}
            <form action="{{ route('lesson.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <p class="small pull-right">{{ __('Title') }}</p>
                    <input type="text" onkeyup="$('#slug')[0].value = string_to_slug(this.value)" name="title"
                        placeholder="title" class="form-control">
                </div>
                <div class="form-group">
                    <p class="small">{{ __('Slug') }}</p>
                    <input type="text" id="slug" name="slug" placeholder="" class="form-control bg-grey" readonly>
                </div>
                <div class="form-group">
                    <input type="text" name="teacher" class="form-control" value="{{ auth()->user()->complete_name }}"
                        disabled>
                </div>

                <div class="form-group">
                    <select name="course_id" class="form-control">
                        @foreach (App\Models\Course::all() as $course)
                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group text-right">
                    <x-dd-button id="collapseNew" icon="fa fa-plus" title="{{ __('Back') }}" color="info" />
                    <input type="submit" value="{{ __('New lesson') }}" class="btn btn-success">
                </div>
            </form>
            </x-dd-div>
        </div>
        <div id="collapseSearch" class="collapse bg-white" aria-labelledby="headingTwo" data-parent="#accordionLessons">
            Anim pariatur cliche
        </div>
    </div>
</div>
