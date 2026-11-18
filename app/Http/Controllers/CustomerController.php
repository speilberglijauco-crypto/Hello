<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;

class CustomerController extends Controller
{
    public function index() {
       /* $customers =[
            [
                'id'=> 1,
                'full_name'=> "John Stewart",
                'email'=> 'js@gmail.com',
                'phone'=> '091563857'
            ],
            [
                'id'=> 2,
                'full_name'=> "Barry Allen",
                'email'=> 'BA@gmail.com',
                'phone'=> '091563653'
            ],
            [
                'id'=> 3,
                'full_name'=> "John Lennon",
                'email'=> 'jl@gmail.com',
                'phone'=> '091561342'
            ],
            [
                'id'=> 4,
                'full_name'=> "Ringo Starr",
                'email'=> 'RS@gmail.com',
                'phone'=> '091563241'
            ],
            [
                'id'=> 5,
                'full_name'=> "Paul McCartney",
                'email'=> 'PM@gmail.com',
                'phone'=> '091123456'
            ],
        ];*/
        $customers = Customer::all();
        return view('customer', compact('customers'));
        //return view ('customer', ['customers'=> $customers]);
    }
    public function create() {
        return view('customer.create');
    }
    public function store(Request $request) {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'nullable|string|max:20',
            'avatar'=> 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if($request->hasFile('avatar')){
            $manager = new ImageManager(new GdDriver());
            $image = $manager->read(
                $request->file('avatar')->getPathname()

            )->cover(300, 300);
            $fileName= Str::uuid(). '.jpg';
            $path ='customers/'. $fileName;

            Storage::disk('public')->put(
                $path,
                (string) $image ->toJpeg(80)
            );

            $validatedData['avatar'] =$fileName;
    
        }
       Customer::create($validatedData);

        return redirect()->route('customers.index')->with('Success', 'Customer created successfully.');
    }
    public function show(Customer $customer) {
        
        return view('customer.show', compact('customer'));
    }
     public function edit(Customer $customer) {
        // $customer = Customer::findOrFail($id);
        return view('customer.edit', compact('customer'));
    }
    public function update(Request $request, Customer $customer) {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'nullable|string|max:20',
            'avatar'=> 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if($request->hasFile('avatar')){
            $manager = new ImageManager(new GdDriver());
            $image = $manager->read(
                $request->file('avatar')->getPathname()

            )->cover(300, 300);
            $fileName= Str::uuid(). '.jpg';
            $path ='customers/'. $fileName;

            Storage::disk('public')->put(
                $path,
                (string) $image ->toJpeg(80)
            );

            $validatedData['avatar'] =$fileName;
    
        }

        //$customer = Customer::findOrFail($id);
        $customer->update($validatedData);


        return redirect()->route('customers.index')->with('Success', 'Customer updated successfully.');
    }
    public function destroy(Customer $customer) {
        // $customer = Customer::findOrFail($id);
        if ($customer->avatar) {
            Storage::disk('public')->delete('customers/' . $customer->avatar);
        }
        $customer->delete();
        return redirect()->route('customers.index')->with('Success', 'Customer deleted successfully.');
    }
}
