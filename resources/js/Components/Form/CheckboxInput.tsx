import { ComponentProps } from 'react';

interface CheckboxInputProps extends ComponentProps<'input'> {
    label?: string;
}

export function CheckboxInput({ label, name, ...props }: CheckboxInputProps) {
    return (
        <label className="flex items-center select-none" htmlFor={name}>
            <input
                id={name}
                name={name}
                type="checkbox"
                className="mr-2 text-indigo-600 rounded form-checkbox focus:ring-indigo-600"
                {...props}
            />
            <span className="text-sm text-gray-300">{label}</span>
        </label>
    );
}