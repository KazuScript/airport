import React from "react";

declare module "@material-tailwind/react" { 

  interface GenericProps {
    placeholder?: any;
    onPointerEnterCapture?: any;
    onPointerLeaveCapture?: any;
  }

  export interface NavbarProps extends GenericProps {}
  export interface TypographyProps extends GenericProps {}
  export interface ButtonProps extends GenericProps {}
  export interface IconButtonProps extends GenericProps {}
}