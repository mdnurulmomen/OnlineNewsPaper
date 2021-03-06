
@extends('reporter.layout.app')
@section('contents')
<div class="content p-4">
    <h2 class="mb-4"> News Setting </h2>
    <div class="card mb-4">
        <legend class="text-center">
            <img src="{{ asset('assets/front/images/news/'.$newsToUpdate->preview) }}" class="img-thumbnail" alt="No Image">
        </legend>
        <div class="card-body">
            <form method="POST" action = "{{ route('reporter.edited_news_submit', $newsToUpdate->id) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">
                            <strong>Categories Selection: </strong>
                        </legend>
                        <div class="col-sm-10">
                            <select name="categoryId" class="form-control">
                                @foreach($allCategories as $category)
                                    <option value="{{ $category->id }}" @if($category->id == $newsToUpdate->category_id) selected @endif > {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">News Title:</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control form-control-lg" value="{{$newsToUpdate->title}}" placeholder="Title of News">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Description:</label>
                    <div class="col-sm-10">
                        <textarea name="description" class="form-control form-control-lg" rows="5" id="textArea"> {{$newsToUpdate->description}} </textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Picture:</label>
                    <div class="col-sm-10">
                        <input type="file" name="preview" class="form-control form-control-lg" accept="image/*">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Status:</label>
                    <div class="col-sm-10">
                        <label class="checkbox-inline"><input type="checkbox" @if($newsToUpdate->status==1) checked @endif disabled>Published</label>
                        <label class="checkbox-inline"><input type="checkbox" @if($newsToUpdate->status==0) checked @endif disabled>Unpublished</label>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-block btn-lg btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        bkLib.onDomLoaded(function () {
            new nicEditor({iconsPath: '{{asset('assets/reporter/images/nicEditorIcons.gif')}}'}).panelInstance('textArea');
        });
    });
</script>
@stop