<form class="form form-border"
      role="form"
      method="POST"
      action="{{ url('/category') }}">

    {{ csrf_field() }}

            <!-- widget name input -->

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                <label class="control-label">Category Name</label>

                <input type="text"
                       class="form-control"
                       name="name"
                       value="{{ old('name') }}" />

                @if ($errors->has('name'))

                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>

                @endif

            </div>

    <!-- end widget name input -->

    <div class="form-group{{ $errors->has('brief') ? ' has-error' : '' }}">

        <label class="control-label">Category Brief</label>

        <input type="text"
               class="form-control"
               name="brief"
               value="{{ old('brief') }}" />

        @if ($errors->has('brief'))

            <span class="help-block">
                        <strong>{{ $errors->first('brief') }}</strong>
                    </span>

        @endif

    </div>

    <!-- submit button -->

    <div class="form-group">

        <button type="submit"
                class="btn btn-primary btn-lg">

            Create

        </button>

    </div>

    <!-- end submit button -->

</form>