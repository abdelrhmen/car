<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::paginate(10);

        return view('admin.message.index',compact('messages'));
    }
    public function destroy(int $id)
    {
        $Message = Message::findOrFail($id);
        $Message->delete();

        return redirect()->route('admin.message.index');
    }
}
