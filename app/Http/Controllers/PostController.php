<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function search(Request $request)
    {

        if ($request->ajax()) {
            $data = Post::where('quotes', 'like', '%' . $request->search . '%')->get();
            $output = '';
            if (count($data) > 0) {
                $output = '
            <table class="table">
            <thead>
            <tr>
                <th scope="col">Quotes</th>
            </tr>
            </thead>
            <tbody>';
                foreach ($data as $row) {
                    $output .= '
                    <tr>
                    <td>
                    <input type="text" class="form-control" id="text-copy" value="' . $row->quotes . '">
                    </td>
                    <td>
                        <span class="input-group-btn">
                        <button class="btn btn-primary copy-btn" type="button" onclick="copyText()">
                            <span class="fa fa-copy"></span>
                        </button>
                        </span>
                    </td>
                    </tr>
                    ';
                }
                $output .= '
                </tbody>
            </table>';
            } else {
                $output .= 'No results';
            }
            return $output;
        }
    }
}
