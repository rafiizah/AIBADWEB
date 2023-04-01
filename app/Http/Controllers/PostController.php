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
                    <td>' . $row->quotes . '</td>
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
