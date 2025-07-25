const Button = ({ children, className = "", ...props }) => (
  <button
    className={`px-8 py-2.5 bg-figma-to-r from-figma-gradient-start to-figma-gradient-end text-white rounded-xl 
               font-semibold border border-white/40 hover:opacity-90 transition duration-300 ${className}`}
    {...props}
  >
    {children}
  </button>
);

export default Button;