<table class="table table-striped">

    <thead>
    <tr>

        <th>Id</th>
        <th>Icon</th>
        <th>Name</th>
        <th>Draft</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>

    <tbody>
    <tr>

        <!-- id -->

        <td>{{ $category->id }}</td>

        <!-- end id -->

        <!-- name -->

        <td>
            <a href="/widget/{{ $category->id }}/edit">

                {{ $category->name }}

            </a>
        </td>

        <!-- end name -->

        <!-- date created -->

        <td>{{ $category->created_at }}</td>
        <td>{{ $category->created_at }}</td>

        <!-- end date created -->

               <!-- edit button -->

        <td>
            <a href="/widget/{{ $category->id }}/edit">

                <button type="button"
                        class="btn btn-default">

                    Edit

                </button>

            </a>
        </td>

        <!-- end edit button -->

        <!-- begin delete form -->

        <td>

            <div class="form-group">

                <form class="form"
                      role="form"
                      method="POST"
                      action="{{ url('/widget/'. $category->id) }}">

                    <input type="hidden"
                           name="_method"
                           value="delete">

                    {{ csrf_field() }}

                    <input class="btn btn-danger"
                           Onclick="return ConfirmDelete();"
                           type="submit"
                           value="Delete">

                </form>

            </div>

        </td>

        <!-- end delete form -->


    </tr>
    </tbody>

</table>