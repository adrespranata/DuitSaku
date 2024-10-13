import React from "react";
import { useForm } from "@inertiajs/react";
import TextInput from "@/Components/Form/TextInput";
import FieldGroup from "@/Components/Form/FieldGroup";
import { CheckboxInput } from "@/Components/Form/CheckboxInput";

export default function LoginPage() {
    const { data, setData, errors, post, processing } = useForm({
        username: 'johndoe',
        password: 'secret',
        remember: false
    });

    return (
        <main className="flex justify-center h-screen min-h-full dark:bg-slate-900">
            {/* Login Container */}
            <div className="flex flex-col justify-center flex-1 px-6 py-12 lg:px-8">
                <div className="sm:mx-auto sm:w-full sm:max-w-sm">
                    <img
                        alt="Your Company"
                        src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600"
                        className="w-auto h-10 mx-auto"
                    />
                </div>

                {/* Form */}
                <div className="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                    <form action="#" method="POST" className="space-y-6">
                        {/* Username */}
                        <FieldGroup
                            label="Username"
                            name="password"
                            error={errors.username}
                        >
                            <TextInput
                                type="text"
                                error={errors.username}
                                value={data.username}
                                onChange={e => setData('username', e.target.value)}
                                required
                            />
                        </FieldGroup>

                        {/* Password */}
                        <FieldGroup
                            label="Password"
                            name="password"
                            error={errors.password}
                        >
                            <TextInput
                                type="password"
                                error={errors.password}
                                value={data.password}
                                onChange={e => setData('password', e.target.value)}
                                required
                            />
                        </FieldGroup>

                        {/* Remember Me */}
                        <div className="flex items-center justify-between">
                            <div className="flex items-center">
                                <FieldGroup>
                                    <CheckboxInput
                                        label="Remember Me"
                                        name="remember"
                                        id="remember"
                                        checked={data.remember}
                                        onChange={e => setData('remember', e.target.checked)}
                                    />
                                </FieldGroup>
                            </div>
                            <div className="text-sm">
                                <a
                                    href="#"
                                    className="font-semibold text-indigo-600 hover:text-indigo-500"
                                >
                                    Forgot password?
                                </a>
                            </div>
                        </div>

                        {/* Submit Button */}
                        <button
                            type="submit"
                            className="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                        >
                            Sign in
                        </button>

                        {/* Create Account Link */}
                        <div className="flex items-center justify-between">
                            <label htmlFor="sign-up" className="text-sm text-gray-600 dark:text-gray-300">
                                Don't have an account?
                            </label>
                            <a href="#" className="text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                                Sign-Up
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </main >
    );
};
