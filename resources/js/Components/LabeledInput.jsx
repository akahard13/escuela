import { InputText } from 'primereact/inputtext';
import { forwardRef, useEffect, useImperativeHandle, useRef } from 'react';
import { Password } from 'primereact/password';
import { FloatLabel } from 'primereact/floatlabel';

export default forwardRef(function TextInput(
  { type = 'text', className = '', label = '', name = '', isFocused = false, ...props },
  ref,
) {
  const localRef = useRef(null);

  useImperativeHandle(ref, () => ({
    focus: () => localRef.current?.focus(),
  }));

  useEffect(() => {
    if (isFocused) {
      localRef.current?.focus();
    }
  }, [isFocused]);

  return (
    <FloatLabel>
      <InputText
        {...props}
        type={type}
        ref={localRef}
        className={`w-full p-2 border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 ${className}`}
      />

      <label htmlFor={name}>{label}</label>
    </FloatLabel>
  );
});
