@extends('Backend.master')
@section('title_page','Add Students')
@section('title_side','Add Students')
@section('content')
    <div class="bg-card rounded-lg border border-border p-6 w-[75%] mx-auto">
                        <form class="space-y-4" id="addProductForm" method="post" enctype="multipart/form-data" action="{{route('addStudent')}}">
                            @csrf
                            
                            <div class="grid grid-cols-2 gap-3">
                                <div>
                                    <label class="block text-sm font-medium text-card-foreground mb-1">First Name</label>
                                    <input type="text" name="first_name" step="0.01" class="w-full px-3 py-2 border border-border rounded-lg bg-input text-sm" placeholder="first name">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-card-foreground mb-1">Last Name</label>
                                    <input type="text" name="last_name" class="w-full px-3 py-2 border border-border rounded-lg bg-input text-sm" placeholder="last name">
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-3">
                                <div>
                                    <label class="block text-sm font-medium text-card-foreground mb-1">Age</label>
                                    <input type="number" name="age" step="0.01" class="w-full px-3 py-2 border border-border rounded-lg bg-input text-sm" placeholder="Enter your age">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-card-foreground mb-1">Gender</label>
                                    <select name="gender" class="w-full px-3 py-2 border border-border rounded-lg bg-input text-sm">
                                        <option value="" disabled selected>Select your gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-card-foreground mb-1">Date of Birth</label>
                                <input type="date" name="dob" class="w-full px-3 py-2 border border-border rounded-lg bg-input text-sm" placeholder="Enter your email ">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-card-foreground mb-1">Email</label>
                                <input type="email" name="email" class="w-full px-3 py-2 border border-border rounded-lg bg-input text-sm" placeholder="Enter your email ">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-card-foreground mb-1">Image</label>
                                <input type="file" name="img" class="w-full px-3 py-2 border border-border rounded-lg bg-input text-sm" placeholder="choose an image">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-card-foreground mb-1">Major</label>
                                <input type="text" name="major" class="w-full px-3 py-2 border border-border rounded-lg bg-input text-sm" placeholder="Enter your major ">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-card-foreground mb-1">University</label>
                                <select name="uni" class="w-full px-3 py-2 border border-border rounded-lg bg-input text-sm">
                                    <option value="">RULE</option>
                                    <option value="electronics">RUPP</option>
                                    <option value="clothing">CADT</option>
                                    <option value="books">AUPP</option>
                                    <option value="home">Other</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-card-foreground mb-1">Address</label>
                                <input type="text" name="address" class="w-full px-3 py-2 border border-border rounded-lg bg-input text-sm" placeholder="Enter your address">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-card-foreground mb-1">Phone Number</label>
                                <input type="number" name="phone" class="w-full px-3 py-2 border border-border rounded-lg bg-input text-sm" placeholder="Enter your phone number">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-card-foreground mb-1">Password</label>
                                <input type="text" name="password" class="w-full px-3 py-2 border border-border rounded-lg bg-input text-sm" placeholder="Enter your password">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="btn" value="Submit" id="btnSubmit"  class="w-full px-4 py-2 bg-green-800 text-white font-semibold rounded-lg hover:bg-green-500 cursor-pointer">
                                <!-- <input type="submit" name="btn" value="Update" id="btnUpdate" class="btn btn-success">
                                <input type="submit" name="btn" value="Cancel" id="btnCancel" class="btn btn-danger"> -->
                            </div>
                        </form>
                    </div>
@endsection