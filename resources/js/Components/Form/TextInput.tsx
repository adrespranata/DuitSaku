import { ComponentProps } from 'react';

interface TextInputProps extends ComponentProps<'input'> {
    error?: string;
}

export default function TextInput({
    name,
    className,
    error,
    ...props
}: TextInputProps) {
    return (
        <input
            id={name}
            name={name}
            {...props}
            className={`form-input w-full dark:bg-gray-800 dark:text-white dark:ring-gray-600 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 rounded-md ${error ? 'border-red-400 focus:border-red-400 focus:ring-red-400' : ''
                } ${className}`}
        />
    );
}
