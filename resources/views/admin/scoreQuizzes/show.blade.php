@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.scoreQuiz.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.score-quizzes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.scoreQuiz.fields.id') }}
                        </th>
                        <td>
                            {{ $scoreQuiz->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.scoreQuiz.fields.lecon') }}
                        </th>
                        <td>
                            {{ $scoreQuiz->lecon->label ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.scoreQuiz.fields.quiz') }}
                        </th>
                        <td>
                            {{ $scoreQuiz->quiz->nom ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.scoreQuiz.fields.utilisateur') }}
                        </th>
                        <td>
                            {{ $scoreQuiz->utilisateur->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.scoreQuiz.fields.score') }}
                        </th>
                        <td>
                            {{ $scoreQuiz->score }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.score-quizzes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection