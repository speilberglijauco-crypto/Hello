<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Users;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;

class UserController extends Controller
{
    public function index() {
       /* $users =[
            [
                'id'=> 1,
                'full_name'=> "George Harisson",
                'email'=> 'GH@gmail.com',
                'phone'=> '091565467'
            ],
            [
                'id'=> 2,
                'full_name'=> "Liam Gallagher",
                'email'=> 'LG@gmail.com',
                'phone'=> '091563812'
            ],
            [
                'id'=> 3,
                'full_name'=> "Noel Gallagher",
                'email'=> 'NG@gmail.com',
                'phone'=> '091573812'
            ],
            [
                'id'=> 4,
                'full_name'=> "Daemon Albarn",
                'email'=> 'DA@gmail.com',
                'phone'=> '091565278'
            ],
            [
                'id'=> 5,
                'full_name'=> "Christiano Ronaldo",
                'email'=> 'SIUUU@gmail.com',
                'phone'=> '091177777'
            ]
        ];
        return view ('user', ['users'=>$users]); */
        $users = Users::all();
        return view('user', compact('users'));
    }
      public function create() {
        return view('user.create');
    }
    public function store(Request $request) {
        $validatedData = $request->validate([
            'username' => ['required', 'string', 'max:50', Rule::unique('user', 'username')],
            'full_name' => 'required|string|max:100',
            'password' => 'required|string|min:6',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        if ($request->hasFile('avatar')) {
            $validatedData['avatar'] = $this->storeAvatar($request->file('avatar'));
        }

       Users::create($validatedData);

        return redirect()->route('users.index')->with('Success', 'User created successfully.');
    }
    public function show(Users $user) {
        
        return view('user.show', compact('user'));
    }
    public function edit(Users $user) {
        return view('user.edit', compact('user'));
    }
    public function update(Request $request, Users $user) {
        $validatedData = $request->validate([
            'username' => ['required', 'string', 'max:50', Rule::unique('user', 'username')->ignore($user->id)],
            'full_name' => 'required|string|max:100',
            'password' => 'nullable|string|min:6',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if (empty($validatedData['password'])) {
            unset($validatedData['password']);
        } else {
            $validatedData['password'] = Hash::make($validatedData['password']);
        }

        if ($request->hasFile('avatar')) {
            $validatedData['avatar'] = $this->storeAvatar($request->file('avatar'));
        }

        $user->update($validatedData);

        return redirect()->route('users.index')->with('Success', 'User updated successfully.');
    }

    private function storeAvatar(UploadedFile $avatar): string
    {
        $manager = new ImageManager(new GdDriver());
        $image = $manager->read($avatar->getPathname())->cover(300, 300);
        $fileName = Str::uuid().'.jpg';
        $path = 'users/'.$fileName;

        if (! Storage::disk('public')->put($path, (string) $image->toJpeg(80))) {
            throw new \RuntimeException('Unable to store user avatar.');
        }

        return $fileName;
    }
    public function destroy(Users $user) {
        // $user = Users::findOrFail($id);
        if ($user->avatar) {
            Storage::disk('public')->delete('users/' . $user->avatar);
        }
        $user->delete();
        return redirect()->route('users.index')->with('Success', 'User deleted successfully.');
    }

}
