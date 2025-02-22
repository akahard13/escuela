import { InputText } from 'primereact/inputtext';
import { forwardRef, useEffect, useImperativeHandle, useRef } from 'react';

export default forwardRef(function TextInput(
  { type = 'text', className = '', label = '', isFocused = false, ...props },
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
    <div className="p-float-label">
      <InputText
        {...props}
        type={type}
        className={
          'rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 ' +
          className
        }
        ref={localRef}
      />
      <label htmlFor="in">{label}</label>
    </div>
  );
});
